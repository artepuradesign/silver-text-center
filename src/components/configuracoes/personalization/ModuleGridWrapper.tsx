import React from 'react';

interface ModuleGridWrapperProps {
  children: React.ReactNode;
  className?: string;
}

const ModuleGridWrapper = ({ children, className = '' }: ModuleGridWrapperProps) => {
  return (
    <div 
      className={[
        "grid w-full mx-auto justify-items-center",
        "px-2 sm:px-4",
        "gap-2 sm:gap-3",
        "[grid-template-columns:repeat(auto-fill,minmax(140px,1fr))]",
        "sm:[grid-template-columns:repeat(auto-fill,minmax(160px,1fr))]",
        "md:[grid-template-columns:repeat(auto-fill,minmax(170px,1fr))]",
        "lg:[grid-template-columns:repeat(auto-fill,minmax(180px,1fr))]",
        "justify-center",
        className,
      ].join(" ")}
    >
      {children}
    </div>
  );
};

export default ModuleGridWrapper;