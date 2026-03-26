import * as pdfjsLib from 'pdfjs-dist';
import {
    EventBus,
    PDFFindController,
    PDFLinkService,
    PDFViewer,
} from 'pdfjs-dist/web/pdf_viewer';

// Vite resolves the correct hashed URL — guaranteed version match
// TO
import workerUrl from 'pdfjs-dist/build/pdf.worker.min.mjs?url';

window.pdfjsLib = pdfjsLib;
window.pdfjsViewer = { EventBus, PDFFindController, PDFLinkService, PDFViewer };

pdfjsLib.GlobalWorkerOptions.workerSrc = workerUrl;