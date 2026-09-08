<x-layout>
    <div class="space-y-32 pb-20">
        
        <!-- Hero Section-->
        <section class="min-h-[calc(100dvh-5rem)] flex flex-col items-center justify-center text-center max-w-4xl mx-auto px-4 -mt-4">
            
            <!-- Headline -->
            <h1 class="text-5xl sm:text-7xl md:text-8xl font-semibold tracking-tight text-foreground leading-[1.08]">
                Capture thoughts. <br />
                <span class="text-muted-foreground font-normal">Make a plan.</span>
            </h1>

            <!-- Subtitle -->
            <p class="mt-6 text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto font-normal leading-relaxed tracking-normal">
                Idea strips away the noise so you can collect raw thoughts, break them into actionable steps, and execute with clarity.
            </p>

            <!-- Perfectly Aligned Action Buttons -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a 
                    href="{{ route('register') }}" 
                    class="inline-flex items-center justify-center h-12 px-8 rounded-full text-sm font-medium bg-primary text-primary-foreground hover:opacity-90 active:scale-[0.98] transition-all shadow-sm"
                >
                    Get Started
                </a>
                <a 
                    href="{{ route('login')}}" 
                    class="inline-flex items-center justify-center h-12 px-8 rounded-full text-sm font-medium text-foreground bg-white/[0.03] border border-border hover:bg-white/[0.08] hover:border-white/20 active:scale-[0.98] transition-all"
                >
                    Sign In
                </a>
            </div>

            <!-- Subtle Scroll Cue -->
            <div class="mt-16 text-muted-foreground/40 animate-bounce">
                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </section>

        <!-- Product Preview Card -->
        <section class="max-w-4xl mx-auto px-4">
            <div class="rounded-3xl p-1 bg-gradient-to-b from-white/15 via-white/5 to-transparent border border-white/10 shadow-2xl">
                <div class="rounded-[22px] bg-card p-6 sm:p-10 space-y-6">
                    <div class="flex items-center justify-between border-b border-border/60 pb-5">
                        <div class="space-y-1">
                            <span class="text-[11px] font-semibold text-primary uppercase tracking-widest">Featured Concept</span>
                            <h3 class="text-xl sm:text-2xl font-semibold text-foreground tracking-tight">Build a Minimalist SaaS</h3>
                        </div>
                        <span class="text-xs px-3 py-1 rounded-full bg-primary/10 text-primary font-medium border border-primary/20">
                            In Progress
                        </span>
                    </div>

                    <p class="text-sm sm:text-base text-muted-foreground leading-relaxed">
                        A clean idea dashboard that eliminates cognitive overload. Focus on what needs to be built next without unnecessary complexity.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="text-xs font-semibold text-foreground/80 tracking-wide uppercase">Actionable Steps</div>
                        <div class="space-y-2 text-sm text-muted-foreground">
                            <div class="flex items-center gap-3 p-2.5 rounded-xl bg-background/50 border border-border/40">
                                <span class="w-5 h-5 rounded-md border border-primary/40 bg-primary/20 flex items-center justify-center text-[11px] text-primary font-bold">✓</span>
                                <span class="line-through text-muted-foreground/60">Define core data models & actions</span>
                            </div>
                            <div class="flex items-center gap-3 p-2.5 rounded-xl bg-background/50 border border-border/40">
                                <span class="w-5 h-5 rounded-md border border-border/80 flex items-center justify-center"></span>
                                <span class="text-foreground/90">Design Apple-inspired interface</span>
                            </div>
                            <div class="flex items-center gap-3 p-2.5 rounded-xl bg-background/50 border border-border/40">
                                <span class="w-5 h-5 rounded-md border border-border/80 flex items-center justify-center"></span>
                                <span class="text-foreground/90">Ship public release</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Grid -->
        <section class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto px-4">
            <div class="rounded-3xl bg-card border border-border/60 p-8 space-y-4 hover:border-white/20 transition duration-300">
                <div class="w-10 h-10 rounded-2xl bg-white/[0.05] border border-white/10 text-primary flex items-center justify-center">
                    <x-icons.plus class="w-5 h-5"/>
                </div>
                <h3 class="font-semibold text-lg text-foreground tracking-tight">Instant Capture</h3>
                <p class="text-sm text-muted-foreground leading-relaxed">
                    Quickly record spontaneous concepts before they slip away, complete with status tags and rich imagery.
                </p>
            </div>

            <div class="rounded-3xl bg-card border border-border/60 p-8 space-y-4 hover:border-white/20 transition duration-300">
                <div class="w-10 h-10 rounded-2xl bg-white/[0.05] border border-white/10 text-primary flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="font-semibold text-lg text-foreground tracking-tight">Step Execution</h3>
                <p class="text-sm text-muted-foreground leading-relaxed">
                    Turn overwhelming visions into a series of digestible milestones you can check off step by step.
                </p>
            </div>

            <div class="rounded-3xl bg-card border border-border/60 p-8 space-y-4 hover:border-white/20 transition duration-300">
                <div class="w-10 h-10 rounded-2xl bg-white/[0.05] border border-white/10 text-primary flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                </div>
                <h3 class="font-semibold text-lg text-foreground tracking-tight">Resource Linking</h3>
                <p class="text-sm text-muted-foreground leading-relaxed">
                    Attach research papers, repositories, design inspiration, and reference links directly to the idea.
                </p>
            </div>
        </section>

        <!-- Bottom CTA -->
        <section class="text-center py-16 border-t border-border/40 max-w-3xl mx-auto px-4 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-semibold tracking-tight text-foreground">Ready to organize your ideas?</h2>
            <p class="text-muted-foreground text-sm sm:text-base max-w-md mx-auto">Start turning your raw thoughts into completed projects today.</p>
            <div class="pt-2">
                <a 
                    href="{{ route('register') }}" 
                    class="inline-flex items-center justify-center h-11 px-7 rounded-full text-sm font-medium bg-primary text-primary-foreground hover:opacity-90 active:scale-[0.98] transition-all"
                >
                    Create Your Free Account
                </a>
            </div>
        </section>
    </div>
    <footer class="border-t border-border/40 py-8 px-4 text-xs text-muted-foreground flex flex-col sm:flex-row items-center justify-between gap-4 max-w-5xl mx-auto">
        <p>Created by <a class="underline" href="https://github.com/Darya-D-H">Darya</a></p>
        <p>&copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved.</p>
    </footer>
</x-layout>
