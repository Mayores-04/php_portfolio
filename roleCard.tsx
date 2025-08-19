"use client";
import { useRef } from "react";
import { useRouter } from "next/navigation";
import { Button } from "./button";

export interface RoleCardProps {
  title: string;
  Applicants: number;
  roleId: string;
}

export default function RoleCard({
  title = "Title",
  Applicants = 0,
  roleId,
}: RoleCardProps) {
  const cardRef = useRef<HTMLDivElement>(null);
  const router = useRouter();

  const handleMouseMove = (e: React.MouseEvent<HTMLDivElement>) => {
    if (!cardRef.current) return;
    const rect = cardRef.current.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    cardRef.current.style.backgroundImage = `radial-gradient(circle at ${x}px ${y}px, rgba(55,65,81,0.4), transparent 60%)`;
  };

  const handleMouseLeave = () => {
    if (!cardRef.current) return;
    cardRef.current.style.backgroundImage = "none";
  };

  return (
    <div
      ref={cardRef}
      onMouseMove={handleMouseMove}
      onMouseLeave={handleMouseLeave}
      className="w-[420px] py-3 m-3 pl-5 rounded-lg border-2 border-white shadow-lg hover:scale-105 transition-transform duration-300 overflow-hidden cursor-auto bg-transparent"
    >
      <div className="flex flex-col justify-center items-start w-full h-full p-4">
        <h2 className="text-2xl text-white text-center mb-2">{title}</h2>
        <div className="flex items-center w-full justify-between gap-2">
          <p className="text-white text-sm text-center">
            {Applicants} {Applicants === 1 ? "Applicant" : "Applicants"}
          </p>

          <Button
            onClick={() =>
              router.push(`/OfficerRegistration/${encodeURIComponent(roleId)}`)
            }
            className="flex items-center font-normal gap-3 text-white hover:text-[#00E6DA] group bg-transparent hover:bg-transparent"
          >
            View More
            <span className="inline-block text-xl transform -rotate-45 transition-all duration-300 group-hover:rotate-0 text-[#BF40F7] group-hover:text-[#00E6DA]">
              ➜
            </span>
          </Button>
        </div>
      </div>
    </div>
  );
}
